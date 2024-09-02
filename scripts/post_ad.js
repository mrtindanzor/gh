const mainPicker = document.querySelector(".main-category-picker"),
  subPicker = document.querySelector(".sub-category-picker"),
  imagePicker = document.querySelector(".image-picker"),
  imagePreview = document.querySelector(".previews"),
  maincatDisplay = document.querySelector(".maincat-display"),
  subcatDisplay = document.querySelector(".subcat-display"),
  mainCatId = document.querySelector(".maincat-id"),
  subCatId = document.querySelector(".subcat-id"),
  mainCatText = document.querySelector(".maincat-text"),
  subCatText = document.querySelector(".subcat-text"),
  defaultText = "Select subcategory *",
  maxerror = document.querySelector(".error"),
  noSubcategories = ["9", "10", "11"];

//fetch main categories

mainPicker.addEventListener("click", async () => {
  categoriesList = document.querySelector(".maincategories-list");
  subcatDisplay.classList.remove("subcat-display-active");
  if (categoriesList == null) {
    await fetch("categories/maincat_script.php")
      .then((response) => response.json())
      .then((categories) => {
        for (let category of categories) {
          let list = document.createElement("div");
          list.classList.add("maincategories-list");
          list.textContent = category.name;
          list.setAttribute("data-Id", category.id);
          maincatDisplay.append(list);
        }

        let allCategories = document.querySelectorAll(".maincategories-list");
        allCategories.forEach((category) => {
          category.addEventListener("click", () => {
            let id = category.dataset.id;
            mainCatId.value = id;
            mainCatText.textContent = category.textContent;
            subCatText.textContent = defaultText;
            if (noSubcategories.includes(id)) {
              subPicker.style.display = "none";
            } else {
              subPicker.style.display = "flex";
            }
            maincatDisplay.classList.toggle("maincat-display-active");
          });
        });
      });
  }
  maincatDisplay.classList.toggle("maincat-display-active");
});

subPicker.addEventListener("click", async () => {
  subCategoriesList = document.querySelector(".subcategories-list");
  let id = mainCatId.value;
  if (id > 0) {
    subcatDisplay.innerHTML = "";
    let url = "categories/subcat_script.php";
    post = {
      id: id,
    };
    let options = {
      method: "POST",
      header: {
        "Content-Type": "application/json; charset=UTF-8",
      },
      body: JSON.stringify(post),
    };
    await fetch(url, options)
      .then((response) => response.json())
      .then((categories) => {
        for (let category of categories) {
          let list = document.createElement("div");
          list.classList.add("subcategories-list");
          list.textContent = category.name;
          list.setAttribute("data-Id", category.id);
          subcatDisplay.append(list);
        }
      });
    let allCategories = document.querySelectorAll(".subcategories-list");
    allCategories.forEach((category) => {
      category.addEventListener("click", () => {
        subCatId.value = category.dataset.id;
        subCatText.textContent = category.textContent;
        subcatDisplay.classList.toggle("subcat-display-active");
      });
    });
    subcatDisplay.classList.toggle("subcat-display-active");
  }
});

imagePicker.addEventListener("change", () => {
  files = Array.from(imagePicker.files);
  imagePreview.innerHTML = "";
  maxerror.textContent = "";
  if (files.length > 15) {
    imagePicker.value = "";
    maxerror.textContent = "maximum allowed pictures are 15";
    return;
  }

  files.forEach((file, index) => {
    if (
      file.type.endsWith("/jpg") ||
      file.type.endsWith("/jpeg") ||
      file.type.endsWith("/png")
    ) {
      let fr = new FileReader();
      fr.readAsDataURL(file);
      fr.onload = () => {
        let img = document.createElement("img");
        img.classList.add("preview");
        img.src = fr.result;
        let remove = document.createElement("div");
        remove.classList.add("image-remove");
        remove.textContent = "x";
        let imageDiv = document.createElement("div");
        imageDiv.classList.add("image-preview-object");
        imageDiv.append(img, remove);
        imagePreview.append(imageDiv);

        remove.addEventListener("click", () => {
          let currentIndex = Array.from(imagePreview.children).indexOf(
            imageDiv
          );
          files.splice(currentIndex, 1);
          imageDiv.remove();
          const newFiles = new DataTransfer();
          files.forEach((file) => {
            newFiles.items.add(file);
          });
          imagePicker.files = newFiles.files;
        });
      };
    } else {
      imagePicker.value = "";
      maxerror.textContent = "Only png/jpg/jpeg files supported";
      return;
    }
  });
});
