#!/bin/bash

for file in $(find seeds/*.php); do
  echo "Looking for $file"
  php $file
  echo "$file is done !"
  sleep 5
done

echo "All seeds are done"
