import Api from './index'

export default {
    getUserList(data) {
        return Api().post('/management/user/doAction',data)
    }

}