<posts-list>
    <div class="post" each={post in opts.store.getState().posts}>
        <div class="post-avatar">
        </div>

        <h3 class="post-title">{post.title}</h3>

        <div class="post-content">{post.content}</div>
    </div>
</posts-list>
