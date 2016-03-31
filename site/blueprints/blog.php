<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
  template:
    - blog-post
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
  caption:
    label: Caption
    type: text  