import request from '@/utils/request'
import type {  } from '@/types/shop.d'

// [商城平台] 首页
export const Service = (): Promise<any> => {
    return request({
        url: 'shop/',
        method: 'get'
    })
}
