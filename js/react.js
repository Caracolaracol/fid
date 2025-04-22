//darle position relative
//crear input
//crear bloque de resultados

const config = {
  dev: "http://localhost/fide-casg/wp-content/themes/fide",
  prod: "https://fide.cl/wp-content/themes/fide",
};

let isMobile = window.screen.width <= 820;
let list = [];

const styles = {
  searchContainer: {
    backgroundColor: "white",
    color: "black",
    borderRadius: "20px",
    padding: " .3rem 1rem .3rem 2.3rem",
    position: "relative",
    width: isMobile ? "100%" : "100%",
    maxWidth: "650px",
    border: "none",
    cursor: "pointer",
    // outline: "none", //quita el marco negro on click
  },
  maginifyGlassIcon: {
    position: "absolute",
    left: "2%",
    top: "23%",
    width: "20px",
    zIndex: "1000000",
  },
  searchMenu: {
    width: isMobile ? `${window.screen.width}px` : "100%",
    maxWidth: "650px",
    position: "absolute",
    top: "115%",
    right: isMobile ? "-15px" : "0%",
    backgroundColor: "white",
    boxShadow: "3px 3px 9px #ccc",
    height: "50vh",
    display: "flex",
    flexDirection: "column",
    zIndex: "1000",
    overflowY: "scroll",
    overflowX: "hidden",
  },
  searchTitle: {
    fontSize: "16px",
  },
  searchDescription: {
    maxHeight: "45px",
    overflowY: "hidden",
    fontSize: "14px",
    opacity: "0.8",
  },
  searchSlug: {
    backgroundColor: "#055d95",
    color: "white",
    borderRadius: "5px",
    margin: ".6rem 0 0 0",
    padding: "0 10px",
    fontSize: "15px",
  },
  separatorLine: {
    borderBottom: "1px solid #ccc",
  },
  searchItemBlock: {
    padding: isMobile ? "0" : "auto",
  },
  linkStyle: {
    margin: "1rem 0",
    textDecoration: "none",
    color: "#5a5a5a",
  },
  loader: {
    border: "2px solid #f3f3f3",
    borderTop: "2px solid #3498db",
    borderRadius: "50%",
    marginLeft: "10px",
    width: "30px",
    height: "30px",
  },
  spinnerContainer: {
    marginTop: "200px",
    fontSize: "19px",
  },
};

const TipBotSearch = () => {
  const [search, setSearch] = React.useState("");
  const [isSelected, setSelected] = React.useState(false);
  const { ref } = useComponentVisible(true);
  let timer = null;

  const handleChange = (e) => {
    if (timer) {
      clearTimeout(timer);
      timer = null;
    }
    timer = setTimeout(() => {
      setSearch(e.target.value);
    }, 1000);
    setSelected(true);
  };

  const handleClick = () => {
    setSelected(true);
  };

  function useComponentVisible(initialIsVisible) {
    const [isComponentVisible, setIsComponentVisible] =
      React.useState(initialIsVisible);
    const ref = React.useRef(null);

    const handleClickOutside = (event) => {
      if (ref.current && !ref.current.contains(event.target)) {
        setSelected(false);
      }
    };

    React.useEffect(() => {
      document.addEventListener("click", handleClickOutside, true);
      return () => {
        document.removeEventListener("click", handleClickOutside, true);
      };
    }, []);

    return { ref, isComponentVisible, setIsComponentVisible };
  }

  const handleClickSearch = () => {
    setSelected(true);
    // document.getElementsByTagName("body").style.overflowY = "hidden";
  };

  return (
    <div style={{ position: "relative" }} ref={ref} onClick={handleClickSearch}>
      <img
        style={styles.maginifyGlassIcon}
        src={`${config.prod}/images/search.png`}
        alt="ico lupa"
      />
      <input
        type={"text"}
        style={styles.searchContainer}
        onChange={handleChange}
      />
      {search.length > 3 && isSelected && (
        <SearchMenu
          search={search}
          setSearch={setSearch}
          onClick={handleClick}
          isSelected={isSelected}
        />
      )}
    </div>
  );
};

//aqui comienzan las funciones para la navegacion con flechas
const useKeyPress = (targetKey) => {
  const [keyPressed, setKeyPressed] = React.useState(false);

  React.useEffect(() => {
    const downHandler = ({ key }) => {
      if (key === targetKey) {
        setKeyPressed(true);
      }
    };

    const upHandler = ({ key }) => {
      if (key === targetKey) {
        setKeyPressed(false);
      }
    };

    window.addEventListener("keydown", downHandler);
    window.addEventListener("keyup", upHandler);

    return () => {
      window.removeEventListener("keydown", downHandler);
      window.removeEventListener("keyup", upHandler);
    };
  }, [targetKey]);

  return keyPressed;
};

const useEnterPress = (targetKey) => {
  const [keyPressed, setKeyPressed] = React.useState(false);

  React.useEffect(() => {
    const enterHandler = ({ key }) => {
      if (key === targetKey) {
        setKeyPressed(true);
      } else {
        setKeyPressed(false);
      }
    };

    window.addEventListener("keypress", enterHandler);

    return () => {
      window.removeEventListener("keypress", enterHandler);
    };
  }, [targetKey]);

  return keyPressed;
};

//aca terminan las funciiones para la navegacion con flechas

const SearchMenu = ({ search, handleClick, isSelected }) => {
  const [isSearching, setSearching] = React.useState(false);
  const [searchResults, setSearchResults] = React.useState(false);
  const [loading, setLoading] = React.useState(true);
  const [array, setArray] = React.useState([]);
  const [cursor, setCursor] = React.useState(-1);

  const arrowUpPressed = useKeyPress("ArrowUp");
  const arrowDownPressed = useKeyPress("ArrowDown");
  const enterPressed = useEnterPress("Enter");

  React.useEffect(() => {
    fetchHandler(search);
  }, [search]);

  React.useEffect(() => {
    if (arrowUpPressed && cursor > 0) {
      setCursor(cursor - 1);
    }
  }, [arrowUpPressed]);

  React.useEffect(() => {
    if (arrowDownPressed && cursor < array.length - 1) {
      setCursor(cursor + 1);
    }
  }, [arrowDownPressed]);

  React.useEffect(() => {
    if (enterPressed && isSelected) {
      window.location.assign(array[cursor].url);
    }
  }, [enterPressed]);

  const handleArrowKey = (i) => {
    let selected = document.querySelector(`.result-${i}`);

    if (cursor === i) {
      if (selected) {
        selected.scrollIntoView(false, {
          behavior: "smooth",
          block: "center",
          inline: "nearest",
        });
      }
      return true;
    } else {
      return false;
    }
  };

  async function fetchHandler(s) {
    if (s.length < 3) return;
    fetchSearchData(s);
  }

  React.useEffect(() => {
    if (loading) {
      document.getElementById("spinner").animate(
        [
          // keyframes
          { transform: "rotate(0deg)" },
          { transform: "rotate(360deg)" },
        ],
        {
          // timing options
          duration: 800,
          iterations: Infinity,
        }
      );
    }
  }, [loading]);

  async function fetchSearchData(search) {
    setLoading(true);
    if (!isSearching) {
      setSearching(true);
      const data = await fetch(
        `https://tipbotsearch.iapp.cl/app/search/64c039ea221a8925ceaf9540/${search}`,
        // `http://localhost:9007/app/search/docs/64c039ea221a8925ceaf9540/${search}/`,
        {
          method: "GET",
        }
      );
      const response = await data.json();
      list = response;
      console.log(response);
      // let data = createArrayOfData();
      // setArray(response.search)
      setArray(response);
      setSearching(false);
      setSearchResults(true);
      setLoading(false);
      // let response = "hola";
      return response;
    }
  }
  // si el servicio esta caído se puede usar esta funcion para crear datos ficticios
  // function createArrayOfData() {
  //   let array = [];
  //   for (let i = 1; i <= 30; i++) {
  //     array.push({
  //       title: `titulo ${i}`,
  //       description: `description ${i}`,
  //       url: "https://www.casg.cl/noticias",
  //       img_url:
  //         "https://www.casg.cl/wp-content/uploads/2022/08/img-principal.png",
  //     });
  //     getSlug("https://www.casg.cl/noticias");
  //   }
  //   return array;
  // }

  return (
    <div style={styles.searchMenu} onClick={handleClick}>
      {loading ? (
        <div
          className="d-flex justify-content-center"
          style={styles.spinnerContainer}
        >
          <div style={styles.loader} id="spinner"></div>
          &nbsp;Buscando. . .
        </div>
      ) : searchResults && array.length > 0 ? (
        array.map((e, idx) => {
          return (
            <SearchResult
              key={idx}
              data={e}
              index={idx}
              search={search}
              onKeyDown={(e) => keyboardNavigation(e)}
              isSelectedByArrowKey={
                idx === cursor ? handleArrowKey(idx) : false
              }
            />
          );
        })
      ) : (
        <div className="text-center mt-3">no hay resultados.</div>
      )}
    </div>
  );
};

const SearchResult = ({ data, search, isSelectedByArrowKey, index }) => {
  const [isHover, setIsHover] = React.useState();

  React.useEffect(() => {
    console.log({ data, search });
    //eslint-disable-next-line
  }, []);

  React.useEffect(() => {
    setIsHover(isSelectedByArrowKey);
  }, [isSelectedByArrowKey]);

  const getSlug = (url) => {
    let slug = url.split("/")[3];
    let slugNoticia = url.split("/")[4];
    if (slug === "") return "home";
    if (slug === "noticia") {
      return `${slug}/${slugNoticia}`;
    }

    return slug;
  };

  const getSearchComparison = (html, search) => {
    let cleanText = html.replaceAll("\n", " "); //reemplaza los saltos de linea de html por espacios
    let array = cleanText.split(" "); // crea un array separando las palabras
    let matchSentence = "";
    // let htmlToString = html.replace(/(\r\n|\n|\r)/gm, "");
    // let array = Array.from(htmlToString);
    array.map((e, idx) => {
      // guarda en un nuevo array la palabra mas 2 palabras anteriores y siguientes si coinciden con la busqueda
      if (e.toLowerCase().includes(search.toLowerCase())) {
        for (let i = -3; i <= 3; i++) {
          //se crea un string vacio para guardar la frase dentro
          //se crea condicional para el caso de que la palabra coincida con las primeras 2 del html, en ese caso quedaria indice negativo,
          // por lo que reemplazaremos con un string vacio

          if (array[idx + i] === undefined) {
            matchSentence += "";
          } else {
            matchSentence += array[idx + i] + " ";
          }
        }
      }
      //se crea logica para encontrar la descripcion cuando es una frase
      if (e.toLowerCase().includes(search.split(" ")[0].toLowerCase())) {
        for (let i = -3; i <= 3; i++) {
          //se crea un string vacio para guardar la frase dentro
          //se crea condicional para el caso de que la palabra coincida con las primeras 2 del html, en ese caso quedaria indice negativo,
          // por lo que reemplazaremos con un string vacio
          let wordsCounter = search.split(" ").length; //variable que cuente las palabras para saber cuantas comparar

          if (array[idx + i] === undefined) {
            matchSentence += "";
          } else {
            //se crea otro loop para comparar si el resto de las palabras coincide con ese extracto del texto donde
            //se encuentra la primera palabra de la frase
            for (let j = 1; j < wordsCounter; j++) {
              if (array[idx + j].includes(search.split(" ")[j])) {
                matchSentence += array[idx + i] + " ";
              } else {
                matchSentence += "";
              }
            }
          }
        }
      }
    });
    return matchSentence;
  };

  const handleClick = async (url, search, slug) => {
    let res = null;
    if (search && slug) {
      // let data = await fetch(`http://localhost:9007/analytics/new`, {
      let data = await fetch(`https://tipbotsearch.iapp.cl/analytics/new`, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          siteId: "64c039ea221a8925ceaf9540",
          searchQuery: search,
          pagePath: `/${slug}`,
          pageClicked: `/${slug}`,
        }),
      });
      res = await data.json();
      if (res) {
        window.location.assign(url);
      }
    }
  };

  return (
    <div
      style={{
        backgroundColor: isHover ? "#f0f0f0" : "white",
        cursor: "pointer",
      }}
      onMouseEnter={() => setIsHover(true)}
      onMouseLeave={() => setIsHover(false)}
      className={`result-${index}`}
    >
      <div
        onClick={() => handleClick(data.url, search, getSlug(data.url))}
        className="row"
        style={styles.linkStyle}
      >
        <div className="col-3" style={styles.searchItemBlock}>
          <img
            style={{ width: "100%" }}
            src={`${data.img_url}`}
            alt="imagen referencial"
          />
        </div>
        <div className="col-9" style={styles.searchItemBlock}>
          <div className="col-12">
            <h3 style={styles.searchTitle}>{data.title}</h3>
          </div>
          <div className="col-12" style={styles.searchDescription}>
            {getSearchComparison(data.html, search)}
          </div>
          <div className="col-12 d-flex">
            <p style={styles.searchSlug}>{getSlug(data.url)}</p>
          </div>
        </div>
      </div>
      <div style={styles.separatorLine}></div>
    </div>
  );
};

const anotherRootNode = document.getElementById("react-search");
const anotherRoot = ReactDOM.createRoot(anotherRootNode);
anotherRoot.render(React.createElement(TipBotSearch));
