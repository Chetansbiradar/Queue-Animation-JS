var priorityQSize = Array();
var priorityQPriority = Array();
var PriorityQ = Array();
var frontRearOfQ = Array();

function numOfPriorityQueue(){
    var noOfPriorityQ = document.getElementById("numOfPriorityQueues").value;

    //TAKE SIZE
    for(i=0;i<noOfPriorityQ;i++){
        while(priorityQSize[i] == "" || priorityQSize[i] <1 || priorityQSize[i]==undefined)
        priorityQSize[i] = prompt("Enter the number of ArraySize for "+(i+1)+" Priority Queue")
    }

    //SET FRONT REAR FOR EACH Q
    for(i=0;i<noOfPriorityQ;i++){
        frontRearOfQ[i] = [-1,-1]
    }

    //CREATE THOSE ARRAY
    for(i=0;i<noOfPriorityQ;i++){
        document.getElementById("priorityQueueContatiner").innerHTML +='<div class="boxContainer"></div><hr>'

        PriorityQ[i] = Array(parseInt(priorityQSize[i]))

        for (j = 0; j < priorityQSize[i]; j++) {
                document.getElementsByClassName("boxContainer")[i].innerHTML += '<div class="box" id="boxOf' + (i).toString()+(j).toString() + '"></div>'
        }
    }

    //DISABLE AFTER TAKING NO OF PRIORITY QUEUES AND CREATING THEM
    document.getElementById("numOfPriorityQueues").placeholder = "Disabled"
    document.getElementById("numOfPriorityQueues").disabled = true;
    document.getElementById("createPriorityButton").disabled = true;

    //SET PRIORITY TO EACH QUEUE
    for(i=0;i<noOfPriorityQ;i++){   
        priorityQPriority[i] = prompt("Enter the Priority of Array for "+(i+1)+" Priority Queue")
    }
  }

  function insertElement(){
    
    //Validation
    if(document.getElementById("insertElement").value == null || document.getElementById("insertElement").value == ""){
        alert("Enter the element to inserted")
        return
    }
    if(document.getElementById("priorityInsert").value == null || document.getElementById("priorityInsert").value == ""){
        alert("Enter the priority of the queue to inserted")
        return
    }else if(!priorityQPriority.includes(document.getElementById("priorityInsert").value)){
        alert("Priority Doesnt exist")
        return
    }

    //After Validation SUCCESS
    ele = document.getElementById("insertElement").value
    priorityOfEle = document.getElementById("priorityInsert").value
    insert(priorityQPriority.indexOf(priorityOfEle),frontRearOfQ[priorityQPriority.indexOf(priorityOfEle)][0],frontRearOfQ[priorityQPriority.indexOf(priorityOfEle)][1],parseInt(priorityQSize[parseInt(priorityOfEle)-1]))
}

    function insert(indexOfQ,frontQ,rearQ,sizeQ) {

            if (rearQ+1==sizeQ) {
                alert("Queue Full")
            }
            else {
                if(rearQ==-1 && frontQ==-1){
                    frontRearOfQ[indexOfQ][0] = 0
                    frontRearOfQ[indexOfQ][1] = 0
                    PriorityQ[indexOfQ][0] = document.getElementById("insertElement").value;
                }else{
                    // frontRearOfQ[indexOfQ][1]+=1
                    PriorityQ[indexOfQ][++frontRearOfQ[indexOfQ][1]]=document.getElementById("insertElement").value;
                }
            }
          updateColor(indexOfQ,frontRearOfQ[indexOfQ][0],frontRearOfQ[indexOfQ][1],sizeQ);
        // document.getElementById("insertElement").value=""
    }

  function updateColor(indexOfQ,frontQ,rearQ,sizeQ){
    console.log(
        (indexOfQ),
        (frontQ),
        (rearQ),
        (sizeQ)
    )
    //   document.getElementById("frontval").innerText = front
    //   document.getElementById("rearval").innerText = rear
  
    //   console.log("Front: "+frontQ+"\nRear: "+rearQ+"\ncount: "+count);
  
      document.getElementsByClassName("boxContainer")[indexOfQ].innerHTML=""
      for(i=0;i<sizeQ;i++){
          document.getElementsByClassName("boxContainer")[indexOfQ].innerHTML+= 
          '<div class="box" id="boxOf'+indexOfQ.toString()+i+'">'+(PriorityQ[indexOfQ][i]!=undefined?PriorityQ[indexOfQ][i]:"")+'</div'
      }
      if(frontQ==-1 && rearQ == -1){
              for(i=0;i<queue.length;i++)
                    box = "box"+indexOfQ
                  document.getElementsByClassName(box)[i].style.backgroundImage=""
      }
      else if(rearQ==frontQ){
          document.getElementById("boxOf"+indexOfQ+""+rearQ).style.backgroundImage = "linear-gradient(to right, green 0%, green 50%, blue 50%, blue 100%)"
      }else{
          document.getElementById("boxOf"+indexOfQ+""+frontQ).style.backgroundImage = "linear-gradient(to right, green 0%, green 100%)"
          document.getElementById("boxOf"+indexOfQ+""+rearQ).style.backgroundImage = "linear-gradient(to right, blue 0%, blue 100%)"
      }
  
  }
  
  
  function removeElement() {
      found = 0;
      foundatF=null,foundatR=null;
    for(i=0;i<priorityQSize.length;i++){
        for (j=0;j<PriorityQ[i].length;j++){
            if(!isNaN(PriorityQ[i][j])){
                found=1;
                foundatF=i;
                foundatR=j;
                break
            }
        }
        if(found==1){
            break;
        }
    }

    if(found==0){
        alert("No item Left")
        return
    }
    if(frontRearOfQ[foundatF][0] == frontRearOfQ[foundatF][1]){
        delete PriorityQ[foundatF][foundatR];
        frontRearOfQ[foundatF][0] = -1;
        frontRearOfQ[foundatF][1] = -1;
    }else{
        console.log("Deleted: "+PriorityQ[foundatF][foundatR]);
        delete PriorityQ[foundatF][foundatR];
        frontRearOfQ[foundatF][0]+=1;
    }
    updateColor(foundatF,frontRearOfQ[foundatF][0],frontRearOfQ[foundatF][1],parseInt(priorityQSize[foundatF]));
  }