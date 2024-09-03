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
  locationText = document.querySelector(".location-text"),
  defaultText = "Select subcategory *",
  maxerror = document.querySelector(".error"),
  locationPicker = document.querySelector(".ad-location-picker"),
  regionId = document.querySelector(".region-id"),
  cityId = document.querySelector(".city-id"),
  areaList = document.querySelector(".area-list"),
  regionList = document.querySelector(".region-list"),
  cityList = document.querySelector(".city-list"),
  regionSearch = document.querySelector(".region-search"),
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

let fetches = 0;
locationPicker.addEventListener("click", async () => {
  regionList.setAttribute("data-Id", "1");
  regionSearch.setAttribute("placeholder", "find region");
  cityList.classList.remove("city-list-active");
  areaList.classList.toggle("area-list-active");
  regionList.classList.add("region-list-active");
  if (fetches < 1) {
    fetches++;
    await fetch("inc/fetch_regions.php")
      .then((response) => response.json())
      .then((regions) => {
        for (let region of regions) {
          let regionItem = document.createElement("div");
          regionItem.classList.add("region");
          regionItem.setAttribute("data-Id", region.id);
          regionItem.textContent = region.name;
          regionList.append(regionItem);
        }
      });
  }
});

regionList.addEventListener("click", (e) => {
  if (e.target.classList.contains("region")) {
    let region = e.target;
    let id = region.dataset.id;
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
        cityList.innerHTML = "";
        cities.forEach((city) => {
          let cityItem = document.createElement("div");
          cityItem.setAttribute("data-Id", city.id);
          cityItem.textContent = city.name;
          cityItem.classList.add("city");
          cityList.append(cityItem);
        });
      });
    regionId.value = id;
    regionList.setAttribute("data-Id", "0");
    regionSearch.setAttribute("placeholder", "find city");
    cityList.classList.add("city-list-active");
    regionList.classList.remove("region-list-active");
  }
});

cityList.addEventListener("click", (e) => {
  if (e.target.classList.contains("city")) {
    let city = e.target;
    let id = city.dataset.id;
    cityId.value = id;
    locationText.textContent = city.textContent;
    cityList.classList.remove("city-list-active");
    areaList.classList.remove("area-list-active");
  }
});

regionSearch.addEventListener("input", () => {
  let keyword = regionSearch.value.toLowerCase();
  if (regionList.dataset.id == "1") {
    let regions = document.querySelectorAll(".region");
    regions.forEach((region) => {
      let name = region.textContent.toLowerCase();
      if (name.startsWith(keyword) || name.includes(keyword)) {
        region.style.display = "flex";
      } else {
        region.style.display = "none";
      }
    });
  } else {
    let cities = document.querySelectorAll(".city");
    cities.forEach((city) => {
      let name = city.textContent.toLowerCase();
      if (name.startsWith(keyword) || name.includes(keyword)) {
        city.style.display = "flex";
      } else {
        city.style.display = "none";
      }
    });
  }
});
