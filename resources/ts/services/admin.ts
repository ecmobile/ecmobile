import request from '@/utils/request'
import type {  } from '@/types/admin.d'

// [管理平台] 首页
export const Service = (): Promise<any> => {
    return request({
        url: 'admin/',
        method: 'get'
    })
}
