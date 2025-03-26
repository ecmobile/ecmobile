import request from '@/utils/request'
import type {  } from '@/types/user.d'

// [会员中心] 首页
export const Service = (): Promise<any> => {
    return request({
        url: 'user/',
        method: 'get'
    })
}
