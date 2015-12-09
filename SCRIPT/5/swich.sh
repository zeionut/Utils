#!/bin/bash

read -p "Hi, what is your script's name? " name
read -p "Would you like to set exec permission for this script? [Y/N] " yn
if [[ $yn=="Y" || $yn=="y" ]]
	then
		read -p "Exec permission for what group? [u/g/o/a] " ugoa
		touch $name;
		case "$ugoa" in
		[Uu])
			chmod u+x $name
			;;
		[Gg])
			chmod g+x $name
			;;
		[Oo])
			chmod o+x $name
			;;
		[Aa])
			chmod a+x $name
			;;
		esac;
fi

echo -e "#!/bin/bash\n">> $name
