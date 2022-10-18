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


#sudo apt install sshfs

source cfg.sh
fn_stoponerror $? $LINENO

umount $cfgi_local_dir_mount
fn_stoponerror $? $LINENO

rm -r $cfgi_local_dir_mount
fn_stoponerror $? $LINENO
