#!/bin/bash

for file in $(find seeds/*.php); do
  php $file
  sleep 20
done
