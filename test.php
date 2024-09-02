<input type="file" class="select-file" accept="image/" multiple>
<div class="error"></div>
<div class="selected-files"></div>
<style>
.preview-image {
  width: 50px;
  height: 50px;
}
</style>
<script>
const select = document.querySelector('.select-file'),
  error = document.querySelector('.error'),
  preview = document.querySelector('.selected-files');

select.addEventListener('change', () => {
  files = select.files
  for (let file of files) {
    if (file && (file.type.endsWith('/png')) || (file.type.endsWith('/jpg')) || (file.type.endsWith('/jpeg'))) {
      error.textContent = ''
      const fr = new FileReader()
      fr.readAsDataURL(file);
      fr.onload = () => {
        let img = document.createElement('img')
        img.classList.add('preview-image')
        img.src = fr.result
        preview.append(img)
      }
    } else {
      file.remove
      error.textContent = 'Only png/jpeg/jpg files supported'
    }

  }


})
</script>