const advert = document.querySelectorAll(".ad-wrapper");

for (const ad of advert) {
  ad.addEventListener("click", async (e) => {
    if (e.target.classList.contains("delete")) {
      let id = ad.dataset.id;

      fetch(`Profile/delete_ad.php?id=${id}`);
      ad.remove();
    }

    if (e.target.classList.contains("ad-status")) {
      let stateBtn = e.target;
      let status = ad.dataset.status;
      let id = ad.dataset.id;
      let state = document.createElement("span");
      state.classList.add("ad-status");

      if (status == 0) {
        state.classList.add("ad-state-1");
        state.textContent = "Deactivate";
        state.setAttribute("title", "Deactivate Advert");
      } else {
        state.classList.add("ad-state-0");
        state.textContent = "Publish";
        state.setAttribute("title", "Publish Advert");
      }

      await fetch(`Profile/set_status.php?id=${id}&status=${status}`);
      (await status) == 0 ? (ad.dataset.status = 1) : (ad.dataset.status = 0);
      let contr = e.target.parentElement;
      stateBtn.remove();
      contr.append(state);
    }
  });
}
