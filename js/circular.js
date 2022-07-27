var front = 0, rear = -1, count = 0, MAXSIZE;

function updateColor(){
    document.getElementById("frontval").innerText = front
    document.getElementById("rearval").innerText = rear

    console.log("Front: "+front+"\nRear: "+rear+"\ncount: "+count);

    document.getElementsByClassName("boxContainer")[0].innerHTML=""
    for(i=0;i<queue.length;i++){
        document.getElementsByClassName("boxContainer")[0].innerHTML+= 
        '<div class="box" id="boxOf'+i+'">'+(queue[i]!=undefined?queue[i]:"")+'</div'
    }
    document.getElementById("boxOf"+front).style.backgroundImage = "linear-gradient(to right, green 0%,green 50%, blue 50%, blue 100%)"
    if(rear!=front){
        document.getElementById("boxOf"+front).style.backgroundImage = "linear-gradient(to right, green 0%, green 100%)"
        document.getElementById("boxOf"+rear).style.backgroundImage = "linear-gradient(to right, blue 0%, blue 100%)"
    }
    if(count==0){
        document.getElementById("boxOf"+front).style.backgroundImage = ""
        document.getElementById("boxOf"+rear).style.backgroundImage = ""
    }

}

function insertElement() {
    if (document.getElementById("insertElement").value == "") {
        alert("Cannot Insert Empty data, Input some value")
    }else{
        if (count == MAXSIZE) {
            alert("Queue Full")
        }
        else {
            rear=(rear+1)%MAXSIZE;
            count++;
            queue[rear]=document.getElementById("insertElement").value;
        }
        updateColor();
    }
    document.getElementById("insertElement").value=""
    console.log(count)
}

function removeElement() {
    if (count == 0) {
        alert("Queue Empty")
    }
    else {
        console.log("Deleted: "+queue[front]);
        delete queue[front];
        front=(front+1)%MAXSIZE;
        count--;
        console.log("Count: "+count);
    }
    updateColor();  
}