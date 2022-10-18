#!/usr/bin/env bash
#
fn_stoponerror ()
{
	# Usage:
	# fn_stoponerror $? $LINENO
	er=$1
	lNo=$2
	if [ $er -ne 0 ]; then
		printf "\n$me: line $lNo: error [$er]\n"
		exit $er
	fi
}
path0="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
#

source cfg.sh
me="$(basename "$0")"

arg_tutorial_part="$1"
if [ -z "$arg_tutorial_part" ]
then
	echo "Please enter the part of the tutorial..."
	read arg_tutorial_part
fi

path_sources="$path0/Sources"
path_source_start="$path_sources/""$cfg_app_name""_""$arg_tutorial_part""_"
array=$( ls -d $path_source_start*)
path_source=${array[0]}
dir_source=$(basename "$path_source")
if [ ! -d "$path_source" ]; then
	ls path_source
	fn_stoponerror $? $LINENO
fi

path_distr="$path0/Releases"
if [ ! -d "$path_distr" ]; then
	mkdir $path_distr
	fn_stoponerror $? $LINENO
fi

file_distr="$dir_source"".ignore.zip"
echo Creating $file_distr


if [ -f "$path_distr/$file_distr" ]; then
	rm "$path_distr/$file_distr"
	fn_stoponerror $? $LINENO
fi

cd "$path_sources"
fn_stoponerror $? $LINENO

zip -rqFS  "$path_distr/$file_distr" "$dir_source"
fn_stoponerror $? $LINENO

cd "$path0"
printf "\n- Done.\n\n"
