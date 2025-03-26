cur_dir=$(pwd)
cd $cur_dir

Stack=$1
if [ "${Stack}" = "" ]; then
    Stack="all"
else
    Stack=$1
fi

. scripts/include/support.sh

if [[ "${Stack}" = "all" ]]; then
  . scripts/include/code_gen.sh
  . scripts/include/code_pint.sh
  . scripts/include/open_api.sh
elif [[ "${Stack}" = "code" ]]; then
  . scripts/include/code_gen.sh
elif [[ "${Stack}" = "fmt" ]]; then
  . scripts/include/code_pint.sh
elif [[ "${Stack}" = "api" ]]; then
  . scripts/include/open_api.sh
elif [[ "${Stack}" = "analyse" ]]; then
  Echo_Green '------------------------------'
  Echo_Green ' 执行代码静态分析'
  Echo_Green '------------------------------'
  vendor/bin/phpstan analyse app tests
fi
