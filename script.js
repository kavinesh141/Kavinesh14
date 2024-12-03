let input1= document.getElementById("addin")
let add= document.getElementById("addbutton")
let div=document.getElementById("dv1")
let list=document.getElementById("list1")
add.addEventListener("click", adder)

function adder(){
    let newdiv=document.createElement("li")
    newdiv.id="p1"
    let val=input1.value
    newdiv.textContent=val
    list.appendChild(newdiv)
    input1.value=" "
    let delkey=document.createElement("button")
    delkey.textContent="DELETE"
    newdiv.appendChild(delkey)
    delkey.id="del"
    delkey.addEventListener("click", remover)
    function remover(){
        list.removeChild(newdiv)
    }
}