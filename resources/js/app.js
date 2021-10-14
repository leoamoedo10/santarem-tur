require('./bootstrap');

import Vue from 'vue'

import AccessibilityComponent from './components/AccessibilityComponent.vue'

var Contrast = {
    storage: 'contrastState',
    cssClass: 'contrast',
    currentState: null,
    check: checkContrast,
    getState: getContrastState,
    setState: setContrastState,
    toogle: toogleContrast,
    updateView: updateViewContrast
}

  window.toggleContrast = function () { Contrast.toogle() }

  Contrast.check()

  let elements = document.body.querySelectorAll('button, label, p, h1, h2, h3, h4, h5, h6, span, small, strong, li, a');
  elements.forEach((item) => {
    let style = window.getComputedStyle(item)
    let fontSize = parseFloat(style.getPropertyValue('font-size'));
    let size = parseFloat(localStorage.getItem('font-size'));
    item.style.fontSize = (fontSize + size) + 'px'
  });

  window.changeFont = function (decreasesFont = false) {
    let elements = document.body.querySelectorAll('button, label, p, h1, h2, h3, h4, h5, h6, span, small, strong, li, a');
    elements.forEach((item) => {
      let style = window.getComputedStyle(item)
      let fontSize = parseFloat(style.getPropertyValue('font-size'))
      if (decreasesFont) {
        item.style.fontSize = (fontSize - 1) + 'px'
      } else {
        item.style.fontSize = (fontSize + 1) + 'px'
      }
    })

    let size = Number(localStorage.getItem('font-size'))
    size = decreasesFont ? size - 1 : size + 1
    localStorage.setItem('font-size', size)
  }

  function checkContrast () {
    this.updateView()
  }

  function getContrastState () {
    return localStorage.getItem(this.storage) === 'true'
  }

  function setContrastState (state) {
    localStorage.setItem(this.storage, '' + state)
    this.currentState = state
    this.updateView()
  }

  function updateViewContrast () {
    var body = document.body

    if (this.currentState === null) {
      this.currentState = this.getState()
    }
    if (this.currentState) {
      body.classList.add(this.cssClass)
    } else {
      body.classList.remove(this.cssClass)
    }
  }

  function toogleContrast () {
    this.setState(!this.currentState)
  }

const app = new Vue({
    el: '#app',
    components: { AccessibilityComponent }
});
