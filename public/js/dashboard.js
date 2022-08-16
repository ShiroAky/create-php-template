// Botones
const cover = document.getElementById('cover')
const banner = document.getElementById('banner')
const cover_media = document.getElementById('cover-media')
const banner_media = document.getElementById('banner-media')

cover.addEventListener('click', () => { cover_media.click() })
banner.addEventListener('click', () => { banner_media.click() })