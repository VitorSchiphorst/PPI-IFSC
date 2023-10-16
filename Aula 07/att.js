let btn=    document.querySelector('#btn')
let label1= document.querySelector('#label1')
let label2= document.querySelector('#label2')
let result= document.querySelector('#result')
function f (){
   let n1 = Number(label1.value)
   let n2 = Number(label2.value) + 1
   result.innerHTML = " "
   for (let index = n1 - 1; index < n2; index++) {
        
        if(index%2 == 0){
            result.innerHTML += " "+ index

        }        
    }
}   