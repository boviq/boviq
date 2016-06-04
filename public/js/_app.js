import 'babel-polyfill'
import riot from 'riot'
import { createStore } from 'redux'

var reducer = (state={title: 'Default title'}, action) => {
    return state
}

var store = createStore(reducer, __INITIAL_STATE__)

jQuery(document).ready(($) => {
    riot.mount('posts-list', {store: store})
});





riot.tag2('boviq-post', '<div class="post-avatar"> </div> <h3 class="post-title">{opts.store.getState().title}</h3> <div class="post-content">{content}</div> <div class="post-time">{created_at}</div>', '', '', function(opts) {
        this.title = 'Assignment 10 is published'
        this.content = 'Dear students, please check out the assignment 10.'
        this.created_at = '2016-04-20 09:30:00'
});



riot.tag2('posts-list', '<div class="post" each="{post in opts.store.getState().posts}"> <div class="post-avatar"> </div> <h3 class="post-title">{post.title}</h3> <div class="post-content">{post.content}</div> </div>', '', '', function(opts) {
});
