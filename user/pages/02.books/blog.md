---
body_classes: 'header-dark header-transparent'
hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
content:
    items: '@self.children'
    order:
        by: title
        dir: asc
    pagination: true
    limit: 15
feed:
    limit: 15
pagination: true

simplesearch:
    process: false
    route: @self/f
    filters:
        - @self
    filter_combinator: and
---

# Books