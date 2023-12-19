<details class="block-accordion">
    <summary class="block-accordion__summary">
        <span>
            <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6.75L0.874999 12.5957L0.875 0.904328L11 6.75Z" fill="white"/>
            </svg>
        </span>
        <?= $block->summary() ?>
    </summary>
    <div class="block-accordion__body">
        <?= $block->body() ?>
    </div>
</details>