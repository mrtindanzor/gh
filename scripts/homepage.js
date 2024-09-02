const allCategories = document.querySelector(".categories"),
  mainCategoriesContainer = document.querySelector(".main-categories"),
  mainCategories = document.querySelectorAll(".main-category"),
  categoryBackbtn = document.querySelector(".category-backbtn"),
  categoriesSearch = document.querySelector(".categories-search"),
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
        if (!title.includes(keyword)) {
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

//search functionality
categoriesSearch.addEventListener("input", () => {
  let keyword = categoriesSearch.value.toLowerCase();
  if (subCategoriesContainer.dataset.id != 1) {
    for (let category of mainCategories) {
      let title = category.textContent.toLowerCase();
      if (!title.includes(keyword)) {
        category.style.display = "none";
      } else {
        category.style.display = "flex";
      }
    }
  }
});
