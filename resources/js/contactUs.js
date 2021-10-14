import Axios from 'axios'

class ContactUs {
  async post (data) {
    let formData = new FormData()
    for (let key in data) {
      formData.append(key, data[key])
    }
    return Axios.post('https://faleconosco.santarem.pa.gov.br/api/v1/contactus', formData, {
      headers: {
        'Accept': 'application/json',
        'content-type': 'application/x-www-form-urlencoded'
      }
    })
  }
}

export default new ContactUs()
