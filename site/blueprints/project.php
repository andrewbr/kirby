<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    format: MM/DD/YYYY
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags