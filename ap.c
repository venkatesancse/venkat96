#include<stdio.h>
void main()
{
int N,A,D,tn,i;
int tot=0;
scanf("%d",&N);
scanf("%d",&A);

scanf("%d",&D);
tot=(N*(2*A+(N-1)*D))/2;
tn=A+(N-1)*D;
for(i=A;i<=tn;i=i+D)
{
if(i!=tn)
printf("%d",i);
else 
printf("%d",tot);
}
}
