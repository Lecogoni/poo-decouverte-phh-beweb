<?php

interface Deliverable {

  function load(Deliverable $a):void;

  function deliver(Deliverable $a):void;

}