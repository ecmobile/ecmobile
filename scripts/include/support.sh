Color_Text()
{
  echo -e " \e[0;$2m$1\e[0m"
}

Echo_Red()
{
  echo $(Color_Text "$1" "31")
}

Echo_Green()
{
  echo $(Color_Text "$1" "32")
}

Gen_OpenAPI() {
    local directory="app/Api/"

    # 查找目录下的所有目录
    local modules=($(ls "$directory"))

    for item in "${modules[@]}"
    do
        local result=()
        local c="app/Api/${item}/"
        if [ -d "$c" ]; then
            result+=($c)
        fi

        c=("app/Http/Responses/")
        if [ -d "$c" ]; then
            result+=($c)
        fi

        result+=("vendor/juling/laravel-foundation/foundation/src/Http/Responses")

        # vendor/bin/openapi ${result[@]} -o public/docs/api/${item,,}.json -f json # bash 4.0 支持
        vendor/bin/openapi ${result[@]} -o public/docs/api/$(echo $item | tr '[:upper:]' '[:lower:]').json -f json
    done
}
