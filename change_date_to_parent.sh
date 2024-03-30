#!/bin/bash

# Get the parent folder's name
parent_folder=$(dirname "$1")

# Extract the date from the parent folder's name
parent_folder_date=$(basename "$parent_folder")

# Convert the date format to use with the `touch` command
timestamp=$(date -d "$parent_folder_date" +"%Y%m%d0000")

# Change the modification timestamp of the file
touch -t "$timestamp" "$1"
