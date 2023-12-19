<template>
    <div @dblclick="open" class="k-block-accordion">
        <div v-if="content.summary">
            <details>
                <summary v-html="content.summary"></summary>
                <div v-if="content.body" v-html="content.body" class="k-block-accordion__body"></div>
            </details>
        </div>
        <div v-else class="empty">
            <details>
                <summary> {{ $t('field.blocks.accordion.emtpy.placeholder') }}</summary>
                <div v-if="content.body" v-html="content.body" class="k-block-accordion__body"></div>
            </details>
        </div>
    </div>
</template>
<script>
    export default {        
    
    }
</script>
<style lang="scss">
    .empty {
        color: var(--color-text-light);
    }
    .k-block-accordion {
        line-height: 1.5rem;
        color: var(--color-text);
        
        details summary {
            display: flex;
            font-weight: bold;
        }
        details summary:hover { cursor: pointer; }
        details summary::before {
            content: "▶";
            line-height: 1.5rem;
            height: 1.5rem;
            width: 1.5rem;
            color: var(--color-text-light);
        }
        details[open] {
            summary::before {
                content: "▼";
            }
        }
        .k-block-accordion__body {
            margin-left: 1.6rem;
            margin-top: .5rem;

            p, ul, ol { margin-bottom: 0.75rem; }
            li { margin-left: 1rem; }

            p:last-child, ul:last-child, ol:last-child {margin: 0;}

            ul li>p, 
            ol li>p, 
            ul>ul,
            ul>ol, 
            ol>ul {
                margin: 0;
            }
            ul li {list-style-type: disc; }
            ul ul > li {list-style-type: circle; }
            ul ul ul > li {list-style-type: square; }
            ol li {list-style-type: decimal;}
        }
    }
</style>