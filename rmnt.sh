
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

mkdir -p "$cfgi_local_dir_mount"
fn_stoponerror $? $LINENO

#sshfs -o password_stdin $cfgi_remote_user@$cfgi_remote_server:$cfgi_remote_dir $cfgi_local_dir_mount <<< $(cat $path0/pathwordfile1)

sshfs -o password_stdin $cfgi_remote_user@$cfgi_remote_server:$cfgi_remote_dir $cfgi_local_dir_mount <<< $(echo $cfgi_remote_password)
fn_stoponerror $? $LINENO
