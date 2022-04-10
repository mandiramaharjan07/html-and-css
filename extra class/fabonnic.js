var n1=0,n2=1,n3,i,num=10;
document.write(n1);
document.write(n2);

for(i=2;i<num; i++){
   n3=n1+n2;
   document.write(n3);
   n1=n2;
   n2=n3;
}

