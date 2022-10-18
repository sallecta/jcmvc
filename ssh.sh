path0="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
#sudo apt install sshpass
source cfg.sh

#tmp_file=$path0/ssh.sh.tmp
#echo $cfgi_remote_password > $tmp_file

#ssh $cfgi_remote_user@$cfgi_remote_server
#exit

#sshpass -f ssh.sh.tmp ssh $cfgi_remote_user@$cfgi_remote_server
sshpass -p $cfgi_remote_password ssh $cfgi_remote_user@$cfgi_remote_server
