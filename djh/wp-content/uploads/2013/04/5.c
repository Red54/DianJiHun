#include <stdio.h>
int l(int m,int n)
{
	int k=m%n;
	while(k)
	{
		m=n;
		n=k;
		k=m%n;
	}
	return n;
}
int main()
{
	int i,j;
	j=1/l(1,2)*2;
	for(i=3;i<21;i++)
		j*=i/l(j,i);
	printf("%d\n",j);
	return 0;
}
