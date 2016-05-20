import 'babel-polyfill'
import riot from 'riot'
import { createStore } from 'redux'

var reducer = (state={title: 'Default title'}, action) => {
    return state
}

var store = createStore(reducer, window.__INITIAL_STATE__)

jQuery(document).ready(($) => {
    riot.mount('boviq-post', {store: store})
});
