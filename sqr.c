#include<stdio.h>
#include<math.h>
int main()
{
	float n,m,s;
	scanf("%f %f",&n,&m);
	s=sqrt(n*m);
	(s-floor(s)==0)?printf("yes"):printf("no");
	return 0;
}
