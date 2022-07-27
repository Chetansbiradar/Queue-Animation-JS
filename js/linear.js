var front = -1, rear = -1, count = 0, MAXSIZE;

function updateColor(){
    document.getElementById("frontval").innerText = front
    document.getElementById("rearval").innerText = rear

    console.log("Front: "+front+"\nRear: "+rear+"\ncount: "+count);

    document.getElementsByClassName("boxContainer")[0].innerHTML=""
    for(i=0;i<queue.length;i++){
        document.getElementsByClassName("boxContainer")[0].innerHTML+= 
        '<div class="box" id="boxOf'+i+'">'+(queue[i]!=undefined?queue[i]:"")+'</div'
    }
    if(front==-1 && rear == -1){
            for(i=0;i<queue.length;i++)
                document.getElementsByClassName("box")[i].style.backgroundImage=""
    }
    else if(rear==front){
        document.getElementById("boxOf"+front).style.backgroundImage = "linear-gradient(to right, green 0%, green 50%, blue 50%, blue 100%)"
    }else{
        document.getElementById("boxOf"+front).style.backgroundImage = "linear-gradient(to right, green 0%, green 100%)"
        document.getElementById("boxOf"+rear).style.backgroundImage = "linear-gradient(to right, blue 0%, blue 100%)"
    }

}

function insertElement() {
    if (document.getElementById("insertElement").value == "") {
        alert("Cannot Insert Empty data, Input some value")
    }else{
        if (rear+1==MAXSIZE) {
            alert("Queue Full")
        }
        else {
            if(rear==-1 && front==-1){
                front = 0
                rear = 0
                queue[rear]=document.getElementById("insertElement").value;
            }else{
                rear=rear+1
                queue[rear]=document.getElementById("insertElement").value;
            }
        }
        updateColor();
    }
    document.getElementById("insertElement").value=""
}

function removeElement() {
    if (front==-1 && rear==-1) {
        alert("Queue Empty")
    }else if(front == rear){
        delete queue[front];
        front = -1;
        rear = -1;
    }else{
        console.log("Deleted: "+queue[front]);
        delete queue[front];
        front++;
    }
    updateColor();  
}