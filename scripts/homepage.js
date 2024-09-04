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
  subCategoriesContainer = document.querySelector(".sub-categories");

//pull subcategories and add back button functionality
for (let category of mainCategories) {
  category.addEventListener("click", async () => {
    subCategoriesContainer.setAttribute("data-Id", "1");
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
    await fetch(url, options)
      .then((response) => response.json())
      .then((categories) => {
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
      });

    const subCategories = document.querySelectorAll(".subcategory");
    mainCategoriesContainer.classList.add("maincat-deactivated");
    subCategoriesContainer.classList.add("subcat-activated");
    categoryBackbtn.classList.add("category-backbtn-active");
    categoriesSearch.addEventListener("input", () => {
      let keyword = categoriesSearch.value.toLowerCase();
      for (let category of subCategories) {
        let title = category.textContent.toLowerCase();
        if (!title.includes(keyword) || title.startsWith(keyword)) {
          category.style.display = "none";
        } else {
          category.style.display = "flex";
        }
      }
    });
  });
}

//category back button
categoryBackbtn.addEventListener("click", () => {
  subCategoriesContainer.classList.remove("subcat-activated");
  mainCategoriesContainer.classList.remove("maincat-deactivated");
  categoryBackbtn.classList.remove("category-backbtn-active");
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
        category.style.display = "flex";
      } else {
        category.style.display = "none";
      }
    }
  }
});

locationSelector.addEventListener("click", () => {
  locationList.classList.add("display-regions-and-cities-active");
  regionsList.classList.add("region-list-active");
  locationList.setAttribute("data-Id", "1");
});

//Back button functionality
locationBackBtn.addEventListener("click", () => {
  if (locationList.dataset.id == "1") {
    locationList.classList.remove("display-regions-and-cities-active");
    regionsList.classList.remove("region-list-active");
  }
  if (locationList.dataset.id == "2") {
    locationList.setAttribute("data-Id", "1");
    citiesList.classList.remove("cities-list-active");
    regionsList.classList.add("region-list-active");
  }
});
