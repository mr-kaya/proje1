class Request{
    get(url){
        
        return new Promise((resolve,reject)=>{
         fetch(url,{ headers: {
            'Authorization':"Bearer "+ localStorage.getItem("token")
          }})
            .then(response=>response.json())
            .then(data=>resolve(data))
            .catch(err=>reject(err))
        })
    }
}
const req = new Request();
let Uniler;
req.get("https://serverapptest1.herokuapp.com/api/kisiselBilgiler")

.then(data => {
    Uniler =data;
    console.log(Uniler);
})
.catch(err=>console.log(err));
