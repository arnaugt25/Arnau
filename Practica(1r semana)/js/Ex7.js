function primer(num5){
    if (num5==1 || num5==0){
        return false;
    }
    for ($i=2;$i<=Math.sqrt(num5);$i++){
        if(num5%$i==0) return false;
  
    }
    return true;
  }
  function escriuNprimers(num5){
    var compt=0;
    var i=0;
    while(compt<(num5)){
        if(primer(i)) {
          document.write(i)
          compt++;
            i++;}
        else {i++;}
    }
  }
  
  escriuNprimers(num5)