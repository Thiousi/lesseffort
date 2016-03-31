<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: true
  template:
    - default
files:
  sortable: true
  fields:
    link:
      label: Link
      type: text
      required: false
    title:
      label: Title
      type: text
fields:
  title:
    label: Site title
    type:  text
  logo:
    label: Site logo
    type:  selector
    mode:  single
    types:
      - image
  text:
    label: Text
    type:  textarea
  SEOtitle:
    label: SEOtitle
    type:  text  
  SEOdesc:
    label: SEOdesc
    type:  text 
  relatedproducts:
    label: Related products
    type: structure
    entry: >
      {{product}}
    fields:
      product:
        label: Related product
        type: select
        options: query
        query: 
          page: shop
          fetch: pages
          template: product