const allCategories = document.querySelector(".categories"),
  mainCategoriesContainer = document.querySelector(".main-categories"),
  mainCategories = document.querySelectorAll(".main-category"),
  categoryBackbtn = document.querySelector(".category-backbtn"),
  categoriesSearch = document.querySelector(".categories-search"),
  locationSearch = document.querySelector(".region-search-box"),
  locationSelector = document.querySelector(".location-selector"),
  locationList = document.querySelector(".display-regions-and-cities"),
  regionsList = document.querySelector(".region-list"),
  citiesList = document.querySelector(".cities-list"),
  locationBackBtn = document.querySelector(".location-back-button"),
  subCategoriesContainer = document.querySelector(".sub-categories"),
  mainSection = document.querySelector(".main-section");
//Get and set current city if set
let cityChoice = localStorage.getItem("city");
if (cityChoice != null) locationSelector.textContent = cityChoice;

//pull subcategories and add back button functionality
for (let category of mainCategories) {
  category.addEventListener("click", async () => {
    let id = category.dataset.id;
    const url = "categories/subcat_script.php";
    let header = new Headers();
    header.append("Content-Type", "application/json; charset=UTF8");
    let post = {
      id: id,
    };
    let options = {
      method: "POST",
      header,
      body: JSON.stringify(post),
    };
    subCategoriesContainer.setAttribute("data-Id", "1");

    await fetch(url, options)
      .then((response) => response.json())
      .then((categories) => {
        subCategoriesContainer.innerHTML = "";
        for (let category of categories) {
          let subcategory = document.createElement("div"),
            image = document.createElement("img"),
            title = document.createElement("span");
          subcategory.classList.add("category");
          subcategory.classList.add("subcategory");
          subcategory.setAttribute("data-Id", category.id);
          image.classList.add("category-image");
          title.classList.add("category-title");
          image.setAttribute("src", category.image_url);
          image.setAttribute("alt", category.name);
          title.append(category.name);
          title.setAttribute("title", category.name);
          subcategory.append(image, title);
          subCategoriesContainer.append(subcategory);
          allCategories.scrollTo({ top: 0 }, 0);
        }
        mainCategoriesContainer.style.display = "none";
        subCategoriesContainer.style.display = "grid";
        categoryBackbtn.style.display = "block";
      });
  });
}
//category back button
categoryBackbtn.addEventListener("click", () => {
  subCategoriesContainer.style.display = "none";
  mainCategoriesContainer.style.display = "grid";
  categoryBackbtn.style.display = "none";
  subCategoriesContainer.removeAttribute("data-id");
  subCategoriesContainer.innerHTML = "";
});

//Add search functionality to categories and subcategories
categoriesSearch.addEventListener("input", () => {
  let keyword = categoriesSearch.value.toLowerCase();

  if (subCategoriesContainer.dataset.id != 1) {
    for (let category of mainCategories) {
      let title = category.textContent.toLowerCase();
      if (title.includes(keyword) || title.startsWith(keyword)) {
        category.style.display = "inline-flex";
      } else {
        category.style.display = "none";
      }
    }
  }

  const subCategories = document.querySelectorAll(".subcategory");
  if (subCategoriesContainer.dataset.id == 1) {
    for (let category of subCategories) {
      let title = category.textContent.toLowerCase();
      if (title.includes(keyword) || title.startsWith(keyword)) {
        category.style.display = "inline-flex";
      } else {
        category.style.display = "none";
      }
    }
  }
});

let fetches = 1;
locationSelector.addEventListener("click", async () => {
  locationList.classList.add("display-regions-and-cities-active");
  locationList.setAttribute("data-Id", "1");
  document.body.style.overflowY = "hidden";
  if (fetches == 1) {
    let ghanaItem = document.createElement("div");
    ghanaItem.classList.add("ghana");
    ghanaItem.setAttribute("data-Id", "Ghana");
    ghanaItem.textContent = "Ghana";
    regionsList.append(ghanaItem);

    fetches++;
    await fetch("inc/fetch_regions.php")
      .then((response) => response.json())
      .then((regions) => {
        for (let region of regions) {
          let regionItem = document.createElement("div");
          regionItem.classList.add("region");
          regionItem.setAttribute("data-Id", region.id);
          regionItem.textContent = region.name;
          regionsList.append(regionItem);
        }
      });
  }
  regionsList.classList.add("region-list-active");
});

regionsList.addEventListener("click", (e) => {
  if (e.target.classList.contains("ghana")) {
    let ghana = e.target;
    locationSelector.textContent = ghana.textContent;
    localStorage.setItem("city", ghana.textContent);
    locationList.classList.remove("display-regions-and-cities-active");
    document.body.style.overflowY = "auto";
  }
  if (e.target.classList.contains("region")) {
    citiesList.innerHTML = "";
    let region = e.target;
    let id = region.dataset.id;

    //Add whole region option
    let wholeRegion = document.createElement("div");
    wholeRegion.classList.add("whole-region");
    wholeRegion.setAttribute("data-Id", region.textContent);
    wholeRegion.textContent = region.textContent;
    citiesList.append(wholeRegion);

    let url = "inc/fetch_cities.php";
    data = {
      id: id,
    };
    let postData = {
      method: "POST",
      header: {
        "Content-Type": "application/json; charset=UTF8",
      },
      body: JSON.stringify(data),
    };
    fetch(url, postData)
      .then((response) => response.json())
      .then((cities) => {
        cities.forEach((city) => {
          let cityItem = document.createElement("div");
          cityItem.setAttribute("data-Id", city.id);
          cityItem.textContent = city.name;
          cityItem.classList.add("city");
          citiesList.append(cityItem);
        });
      });
    locationList.setAttribute("data-Id", "2");
    locationSearch.setAttribute("placeholder", "find city");
    regionsList.classList.remove("region-list-active");
    citiesList.classList.add("cities-list-active");
  }
});

citiesList.addEventListener("click", (e) => {
  if (e.target.classList.contains("whole-region")) {
    let region = e.target;
    locationSelector.textContent = region.textContent;
    localStorage.setItem("city", region.textContent);
    locationList.classList.remove("display-regions-and-cities-active");
    citiesList.classList.remove("cities-list-active");
    document.body.style.overflowY = "auto";
  }
  if (e.target.classList.contains("city")) {
    let city = e.target;
    locationSelector.textContent = city.textContent;
    localStorage.setItem("city", city.textContent);
    locationList.classList.remove("display-regions-and-cities-active");
    citiesList.classList.remove("cities-list-active");
    document.body.style.overflowY = "auto";
  }
});

//Add search funtionality to location list
locationSearch.addEventListener("input", () => {
  let keyword = locationSearch.value.toLowerCase();
  let id = locationList.dataset.id;
  if (id == 1) {
    let regions = document.querySelectorAll(".region");
    regions.forEach((region) => {
      let regionText = region.textContent.toLowerCase();
      if (!regionText.includes(keyword)) {
        region.style.display = "none";
      } else {
        region.style.display = "inline-flex";
      }
    });
  }
  if (id == 2) {
    let cities = document.querySelectorAll(".city");
    cities.forEach((city) => {
      let cityText = city.textContent.toLowerCase();
      if (!cityText.includes(keyword)) {
        city.style.display = "none";
      } else {
        city.style.display = "inline-flex";
      }
    });
  }
});

//Back button functionality
locationBackBtn.addEventListener("click", () => {
  if (locationList.dataset.id == "1") {
    locationList.classList.remove("display-regions-and-cities-active");
    regionsList.classList.remove("region-list-active");
    document.body.style.overflowY = "auto";
  }
  if (locationList.dataset.id == "2") {
    locationList.setAttribute("data-Id", "1");
    citiesList.classList.remove("cities-list-active");
    regionsList.classList.add("region-list-active");
  }
});

fetch("inc/get_ads.php")
  .then((response) => response.json())
  .then((ads) => {
    ads.forEach((ad) => {
      let advert = document.createElement("a");
      let imageDiv = document.createElement("div");
      let img = document.createElement("img");
      let title = document.createElement("span");
      let price = document.createElement("span");
      advert.setAttribute("href", `inc/ads.php?id=${ad.id}`);
      advert.classList.add("ad-wrapper");
      img.classList.add("ad-image");
      imageDiv.classList.add("ad-image-wrapper");
      title.classList.add("ad-title");
      price.classList.add("ad-price");
      img.src = ad.images;
      title.textContent = ad.title;
      let prices = Number(ad.price);
      price.textContent = `GHS ${prices.toFixed("2")}`;
      imageDiv.append(img);
      advert.append(imageDiv, title, price);
      mainSection.append(advert);
    });
  });
