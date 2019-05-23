#include <stdio.h>
void main() {
	int h, m;
	scanf("%d", &m);
  if(m>=0)
  {
	h = (m/60); 
	m = (m -(60*h));
	printf("%d %d \n",h,m);
  }
  else
  {
  printf("Invalid");
  }
}
