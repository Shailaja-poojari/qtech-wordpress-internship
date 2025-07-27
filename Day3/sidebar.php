<aside>
    <h3>Sidebar</h3>
    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <p>No widgets added yet.</p>
    <?php endif; ?>
</aside>
