'use strict'

const doc = document
const wind = window

const loc = location
const locSearch = loc.search
const locOrigin = loc.origin
const locHref = loc.href
const pathName = loc.pathname

function innerHTML (ele, value) {
  return (ele.innerHTML = value)
}
function setTextContent (ele, value) {
  return (ele.textContent = value)
}
function textContent (ele) {
  return ele.textContent.trim()
}

const ar = $('html[lang="ar"]')

function $ (el) {
  return doc.querySelector(el)
}

function $$ (el) {
  return doc.querySelectorAll(el)
}

doc.onclick = e => {
  if (e.target.localName === 'body' || e.target.offsetParent.localName === 'body') {
    removeBlock()
  }
}

function log (s) {
  console.log(s)
}

const URLSearch = () => new URLSearchParams(locSearch)

const url = URLSearch()

if (url.get('success')) {
  url.delete('success')
  history.replaceState(null, '', pathName + '?' + url)
}

$('.hum-button').onclick = () => $('.hum-button~div').classList.toggle('block')
$('.hum-button~div img').onclick = () => $('.hum-button~div').classList.toggle('block')

const logout = $('#logout')
if (logout) {
  $('#logout').onclick = () => {
    url.set('log-out', 'on')
    loc.href = '?' + url
  }
}

for (const i of $$('.hum-button~div button')) {
  for (const e of i.querySelectorAll('a')) {
    const url = URLSearch()
    const dataset = e.dataset.lang

    url.set(dataset ? 'lang' : 'theme', (dataset && dataset.slice(0, 2)) || e.dataset.theme)

    e.href = '?' + url
  }

  i.onclick = a => a.target.children[1] ? a.target.children[1].classList.toggle('block') : ''
}

const line = $('header>span')

const availWidth = doc.documentElement.scrollHeight - doc.documentElement.clientHeight

doc.onscroll = () => {
  line.style.width = (doc.documentElement.scrollTop / availWidth) * 100 + '%'
}

function removeBlock () {
  for (const i of $$('.block')) {
    i.classList.remove('block')
  }
}

for (const i of $$("header nav a[href*='#']")) {
  i.onclick = r => {
    removeBlock()
    $(`${r.target.attributes[0].value}`).classList.add('block')
  }
}

// abort(
//   "e.target.parentElement.localName !=='nav' && e.target.localName !== 'button'",
//   'removeBlock()'
// )

// abort(
//   "e.target.localName === 'body' || e.target.offsetParent.localName === 'body'",
//   'removeBlock()'
// )

let prevScroll = wind.scrollY

const nav = $('header nav section')

if (screen.availWidth < 1112) {
  wind.onscroll = () => {
    if (prevScroll > wind.scrollY) {
      nav.style.display = 'block'
      nav.parentElement.style.position = 'initial'
    } else {
      nav.style.display = 'none'
      nav.parentElement.style.position = 'absolute'
    }

    prevScroll = wind.scrollY
  }
}

// const scrollPage = doc.scrollingElement || doc.body

// const toBottom = (ele = scrollPage) => {
//   ele.scrollTop = ele.scrollHeight
// }

// if (loc.hash) {
//   const locHashes = $$(`${loc.hash}`)
//   if (locHashes) {
//     for (const i of locHashes) {
//       i.classList.add('block')
//       i.scrollIntoView()
//     }
//     loc.hash = ''
//   }
// }

const carsButton = $$('.cards button, #article-img button')
if (carsButton) {
  for (const i of carsButton) {
    i.onclick = r => {
      fetch(`${locOrigin}/projects/blog/components/head.php?${r.target.name}=${r.target.id}`)

      r.target.name = r.target.name === 'save' ? 'remove' : 'save'

      i.classList.toggle('active')
    }
  }
}

const alerts = $$("[class*='alert']")
if (alerts) {
  for (const i of alerts) {
    i.onclick = r => {
      i.remove()
    }
  }
}

$('body>footer button').onclick = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })

  // scrollPage.scrollTop = 0
}

const usrName = $('.hum-button~div div b')
if (usrName) {
  setTextContent($('.hum-button~div div span'), textContent(usrName).slice(0, 1))
}

// Start #not-found

const goBack = $('#go-back')
if (goBack) {
  goBack.onclick = () => history.back()
}

// www.example.com

// Start articles page

if (locHref.includes('/articles/')) {
  let pageUrl = URLSearch()

  const currentPage = parseInt(pageUrl.get('page')) || 1

  pageUrl.delete('page')
  pageUrl = `?${pageUrl}&page=`

  const togglePages = $('.toggle-pages')
  const lastPage = $('.toggle-pages a:last-of-type')

  // setTextContent($('#ads-results'), `${textContent(lastPage)} ${trans('result')}`)

  const pages = Math.floor(textContent(lastPage) / 40)

  if (pages <= 1) {
    lastPage.classList.add('none')
  } else if (currentPage >= pages - 4) {
    innerHTML(
      togglePages,
      `<a href='${pageUrl + 1}'>1</a><a href='${pageUrl + (currentPage - 1)
      }'>❮</a><a href='${pageUrl + (pages - 4)}'>${pages - 4}</a><a href='${pageUrl + (pages - 3)
      }'>${pages - 3}</a><a href='${pageUrl + (pages - 2)}'>${pages - 2
      }</a><a href='${pageUrl + (pages - 1)}'>${pages - 1}</a><a href='${pageUrl + pages
      }'>${pages}</a>${currentPage + 1 > pages
        ? ''
        : `<a href=${pageUrl}${currentPage + 1}>❯</a>`
      }`
    )
  } else if (currentPage >= 4) {
    innerHTML(
      togglePages,
      `<a href='${pageUrl + 1}'>1</a><a href='${pageUrl + (currentPage - 1)
      }'>❮</a><a href='${pageUrl + currentPage}'>${currentPage}</a><a href='${pageUrl + (currentPage + 1)
      }'>${currentPage + 1}</a><a href='${pageUrl + (currentPage + 2)}'>${currentPage + 2
      }</a><a href='${pageUrl + (currentPage + 3)}'>${currentPage + 3
      }</a><a href='${pageUrl + (currentPage + 1)}'>❯</a><a href='${pageUrl + pages
      }'>${pages}</a>`
    )
  } else {
    innerHTML(
      togglePages,
      `${currentPage >= 1 ? '' : `<a href='${pageUrl + (currentPage - 1)}'>❮</a>`
      }<a href='${pageUrl + 1}'>1</a><a href='${pageUrl + 2}'>2</a><a href='${pageUrl + 3
      }'>3</a><a href='${pageUrl + 4}'>4</a><a href='${pageUrl + (currentPage + 1)
      }'>❯</a><a href='${pageUrl + pages}'>${pages}</a>`
    )
  }

  $(
    `.toggle-pages a${currentPage > 1 ? `[href*='&page=${currentPage}']` : ':first-of-type'}`
  ).classList.add('active')

  const negativePages = $$(
    ".toggle-pages a[href*='&page=-'], .toggle-pages a[href*='&page=0']"
  )

  if (negativePages) {
    for (let i = 0; i < negativePages.length; i++) {
      negativePages[i].remove()
    }
  }
}
