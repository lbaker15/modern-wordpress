import "../css/style.css"

import * as scroll from './modules/scroll';
import * as filters from './modules/filters';
import * as pixi from './modules/pixi';
import * as p5 from './modules/p5';
import * as text from './modules/text';
import * as menu from './modules/menu';
import * as scrolltrig from './modules/scrolltrig';

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}