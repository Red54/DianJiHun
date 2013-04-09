#include <stdio.h>
int main()
{
	int i,j=0,k=0;
	for(i=1;i<101;i++)
	{
		j+=i*i;
		k+=i;
	}
	printf("%d-%d=%d\n",k*k,j,k*k-j);
	return 0;
}
