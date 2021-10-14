

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>DataTables example - Bootstrap 3</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
</head>
<body>
    
<div class="container">    
    <div class="row table-responsive">
				<table id="example" class="table   table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr class="red">
							<th>All Rankings<br>Average*</th>
							<th>University</th>
							<th>Guardian</th>
							<th>Times Higher Education</th>
							<th>Complete University Guide</th>
							
							
						</tr>
					</thead>
			
					<tbody>
						<tr>
							<td>98.2</td>
							<td>University of Oxford</td>
							<td>100</td>
							<td>95.6</td>
							<td>99</td>
							
						</tr>
						<tr>
							<td>96.5</td>
							<td>University of Cambridge</td>
							<td>95.4</td>
							<td>94</td>
							<td>99</td>
							
						</tr>
						<tr>
							<td>86.5</td>
							<td>London School of Economics and Political Science</td>
							<td>81</td>
							<td>81.4</td>
							<td>94</td>
							
						</tr>
						<tr>
							<td>84.9</td>
							<td>Imperial College London</td>
							<td>74.4</td>
							<td>89.4</td>
							<td>91</td>
							
						</tr>
						<tr>
							<td>82.1</td>
							<td>University of St Andrews</td>
							<td>98</td>
							<td>52.4</td>
							<td>96</td>
							
						</tr>
						<tr>
							<td>81.0</td>
							<td>UCL (University College London)</td>
							<td>70.1</td>
							<td>86.9</td>
							<td>86</td>
							
						</tr>
						<tr>
							<td>77.1</td>
							<td>University of Edinburgh</td>
							<td>70.9</td>
							<td>79.4</td>
							<td>81</td>
							
						</tr>
						<tr>
							<td>76.4</td>
							<td>Durham University</td>
							<td>81.5</td>
							<td>57.6</td>
							<td>90</td>
							
						</tr>
						<tr>
							<td>75.8</td>
							<td>University of Warwick</td>
							<td>77.1</td>
							<td>65.3</td>
							<td>85</td>
							
						</tr>
						<tr>
							<td>73.5</td>
							<td>Lancaster University</td>
							<td>73.1</td>
							<td>58.4</td>
							<td>89</td>
							
						</tr>
						<tr>
							<td>73.2</td>
							<td>University of Bath</td>
							<td>80.1</td>
							<td>52.4</td>
							<td>87</td>
							
						</tr>
						<tr>
							<td>72.5</td>
							<td>University of Manchester</td>
							<td>66.6</td>
							<td>70.9</td>
							<td>80</td>
							
						</tr>
						<tr>
							<td>72.0</td>
							<td>University of Bristol</td>
							<td>72</td>
							<td>63</td>
							<td>81</td>
							
						</tr>
						<tr>
							<td>71.9</td>
							<td>King's College London, University o...</td>
							<td>62.5</td>
							<td>76.1</td>
							<td>77</td>
							
						</tr>
						<tr>
							<td>71.3</td>
							<td>Loughborough University</td>
							<td>79.3</td>
							<td>44.55</td>
							<td>90</td>
							
						</tr>
						<tr>
							<td>71.0</td>
							<td>University of Glasgow</td>
							<td>71</td>
							<td>62.9</td>
							<td>79</td>
							
						</tr>
						<tr>
							<td>69.9</td>
							<td>University of Birmingham</td>
							<td>67.3</td>
							<td>61.3</td>
							<td>81</td>
							
						</tr>
						<tr>
							<td>69.6</td>
							<td>University of Exeter</td>
							<td>69.9</td>
							<td>55.9</td>
							<td>83</td>
							
						</tr>
						<tr>
							<td>68.8</td>
							<td>University of Southampton</td>
							<td>67.1</td>
							<td>59.4</td>
							<td>80</td>
							
						</tr>
						<tr>
							<td>68.8</td>
							<td>University of Leeds</td>
							<td>69.7</td>
							<td>56.8</td>
							<td>80</td>
							
						</tr>
						<tr>
							<td>68.6</td>
							<td>University of York</td>
							<td>69.9</td>
							<td>58.8</td>
							<td>77</td>
							
						</tr>
						<tr>
							<td>66.3</td>
							<td>University of Aberdeen</td>
							<td>68.1</td>
							<td>55.7</td>
							<td>75</td>
							
						</tr>
						<tr>
							<td>66.1</td>
							<td>University of Sheffield</td>
							<td>64.2</td>
							<td>60</td>
							<td>74</td>
							
						</tr>
						<tr>
							<td>65.9</td>
							<td>University for the Creative Arts</td>
							<td>63.8</td>
							<td>N/A</td>
							<td>68</td>
							
						</tr>
						<tr>
							<td>65.6</td>
							<td>University of Nottingham</td>
							<td>63</td>
							<td>56.9</td>
							<td>77</td>
							
						</tr>
						<tr>
							<td>64.9</td>
							<td>University of Dundee</td>
							<td>68.4</td>
							<td>52.4</td>
							<td>74</td>
							
						</tr>
						<tr>
							<td>64.2</td>
							<td>Newcastle University</td>
							<td>60.8</td>
							<td>55.7</td>
							<td>76</td>
							
						</tr>
						<tr>
							<td>64.1</td>
							<td>University of East Anglia UEA</td>
							<td>63</td>
							<td>54.3</td>
							<td>75</td>
							
						</tr>
						<tr>
							<td>64.0</td>
							<td>University of the Arts London</td>
							<td>61.9</td>
							<td>N/A</td>
							<td>66</td>
							
						</tr>
						<tr>
							<td>63.9</td>
							<td>Cardiff University</td>
							<td>63.1</td>
							<td>54.7</td>
							<td>74</td>
							
						</tr>
						<tr>
							<td>63.8</td>
							<td>Queen Mary University of London</td>
							<td>58.2</td>
							<td>61.1</td>
							<td>72</td>
							
						</tr>
						<tr>
							<td>63.6</td>
							<td>Queen's University Belfast</td>
							<td>61.6</td>
							<td>54.3</td>
							<td>75</td>
							
						</tr>
						<tr>
							<td>63.1</td>
							<td>Swansea University</td>
							<td>66.9</td>
							<td>49.25</td>
							<td>73</td>
							
						</tr>
						<tr>
							<td>63.0</td>
							<td>University of Liverpool</td>
							<td>59.3</td>
							<td>56.7</td>
							<td>73</td>
							
						</tr>
						<tr>
							<td>62.2</td>
							<td>Royal Holloway, University of London</td>
							<td>63.9</td>
							<td>46.75</td>
							<td>76</td>
							
						</tr>
						<tr>
							<td>62.1</td>
							<td>University of Chichester</td>
							<td>65.2</td>
							<td>N/A</td>
							<td>59</td>
							
						</tr>
						<tr>
							<td>62.0</td>
							<td>University of Sussex</td>
							<td>59.3</td>
							<td>56.8</td>
							<td>70</td>
							
						</tr>
						<tr>
							<td>61.2</td>
							<td>University of Strathclyde</td>
							<td>70</td>
							<td>41.65</td>
							<td>72</td>
							
						</tr>
						<tr>
							<td>61.2</td>
							<td>University of Leicester</td>
							<td>56.6</td>
							<td>56</td>
							<td>71</td>
							
						</tr>
						<tr>
							<td>60.9</td>
							<td>University of Surrey</td>
							<td>60.4</td>
							<td>49.25</td>
							<td>73</td>
							
						</tr>
						<tr>
							<td>60.8</td>
							<td>University of West London</td>
							<td>63.6</td>
							<td>N/A</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>60.8</td>
							<td>University of Reading</td>
							<td>58.9</td>
							<td>52.4</td>
							<td>71</td>
							
						</tr>
						<tr>
							<td>60.6</td>
							<td>Heriot-Watt University</td>
							<td>63.2</td>
							<td>44.55</td>
							<td>74</td>
							
						</tr>
						<tr>
							<td>60.1</td>
							<td>University of Stirling</td>
							<td>65.6</td>
							<td>46.75</td>
							<td>68</td>
							
						</tr>
						<tr>
							<td>58.8</td>
							<td>Northumbria University, Newcastle</td>
							<td>65.7</td>
							<td>44.55</td>
							<td>66</td>
							
						</tr>
						<tr>
							<td>58.8</td>
							<td>Liverpool Hope University</td>
							<td>55.5</td>
							<td>N/A</td>
							<td>62</td>
							
						</tr>
						<tr>
							<td>58.3</td>
							<td>Cardiff Metropolitan University</td>
							<td>63.1</td>
							<td>54.7</td>
							<td>57</td>
							
						</tr>
						<tr>
							<td>58.2</td>
							<td>Queen Margaret University, Edinburg...</td>
							<td>58.4</td>
							<td>N/A</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>58.1</td>
							<td>Aston University, Birmingham</td>
							<td>64.7</td>
							<td>41.65</td>
							<td>68</td>
							
						</tr>
						<tr>
							<td>57.2</td>
							<td>University of Wales Trinity Saint David</td>
							<td>59.4</td>
							<td>N/A</td>
							<td>55</td>
							
						</tr>
						<tr>
							<td>57.1</td>
							<td>Abertay University</td>
							<td>61.2</td>
							<td>N/A</td>
							<td>53</td>
							
						</tr>
						<tr>
							<td>56.7</td>
							<td>University of Kent</td>
							<td>56.2</td>
							<td>46.75</td>
							<td>67</td>
							
						</tr>
						<tr>
							<td>56.7</td>
							<td>Bristol, University of the West of England</td>
							<td>67.3</td>
							<td>41.65</td>
							<td>61</td>
							
						</tr>
						<tr>
							<td>56.6</td>
							<td>University of Essex</td>
							<td>55.1</td>
							<td>46.75</td>
							<td>68</td>
							
						</tr>
						<tr>
							<td>55.7</td>
							<td>Falmouth University</td>
							<td>53.4</td>
							<td>N/A</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>55.6</td>
							<td>Aberystwyth University</td>
							<td>61.1</td>
							<td>41.65</td>
							<td>64</td>
							
						</tr>
						<tr>
							<td>55.4</td>
							<td>Keele University</td>
							<td>63.2</td>
							<td>38.05</td>
							<td>65</td>
							
						</tr>
						<tr>
							<td>55.3</td>
							<td>University of Lincoln</td>
							<td>60.7</td>
							<td>38.05</td>
							<td>67</td>
							
						</tr>
						<tr>
							<td>54.7</td>
							<td>Coventry University</td>
							<td>66.3</td>
							<td>32.65</td>
							<td>65</td>
							
						</tr>
						<tr>
							<td>54.5</td>
							<td>SOAS University of London</td>
							<td>54.5</td>
							<td>38.05</td>
							<td>71</td>
							
						</tr>
						<tr>
							<td>54.3</td>
							<td>Nottingham Trent University</td>
							<td>62.7</td>
							<td>33.25</td>
							<td>67</td>
							
						</tr>
						<tr>
							<td>54.2</td>
							<td>Oxford Brookes University</td>
							<td>62.3</td>
							<td>33.25</td>
							<td>67</td>
							
						</tr>
						<tr>
							<td>54.0</td>
							<td>Solent University (Southampton)</td>
							<td>57</td>
							<td>N/A</td>
							<td>51</td>
							
						</tr>
						<tr>
							<td>53.8</td>
							<td>University of Plymouth</td>
							<td>60.6</td>
							<td>41.65</td>
							<td>59</td>
							
						</tr>
						<tr>
							<td>53.3</td>
							<td>City, University of London</td>
							<td>51.3</td>
							<td>44.55</td>
							<td>64</td>
							
						</tr>
						<tr>
							<td>53.3</td>
							<td>Liverpool John Moores University</td>
							<td>57.2</td>
							<td>41.65</td>
							<td>61</td>
							
						</tr>
						<tr>
							<td>53.2</td>
							<td>University of Gloucestershire</td>
							<td>53.4</td>
							<td>N/A</td>
							<td>53</td>
							
						</tr>
						<tr>
							<td>53.1</td>
							<td>University of Portsmouth</td>
							<td>58.3</td>
							<td>38.05</td>
							<td>63</td>
							
						</tr>
						<tr>
							<td>52.7</td>
							<td>Bournemouth University</td>
							<td>59.4</td>
							<td>41.65</td>
							<td>57</td>
							
						</tr>
						<tr>
							<td>52.6</td>
							<td>University of Huddersfield</td>
							<td>58.5</td>
							<td>33.25</td>
							<td>66</td>
							
						</tr>
						<tr>
							<td>52.5</td>
							<td>Bangor University</td>
							<td>56.8</td>
							<td>41.65</td>
							<td>59</td>
							
						</tr>
						<tr>
							<td>52.1</td>
							<td>University of Hull</td>
							<td>57.1</td>
							<td>38.05</td>
							<td>61</td>
							
						</tr>
						<tr>
							<td>51.8</td>
							<td>Manchester Metropolitan University</td>
							<td>57.2</td>
							<td>33.25</td>
							<td>65</td>
							
						</tr>
						<tr>
							<td>51.8</td>
							<td>Ulster University</td>
							<td>59</td>
							<td>33.25</td>
							<td>63</td>
							
						</tr>
						<tr>
							<td>51.4</td>
							<td>University of Worcester</td>
							<td>53.8</td>
							<td>N/A</td>
							<td>49</td>
							
						</tr>
						<tr>
							<td>50.9</td>
							<td>York St John University</td>
							<td>52.8</td>
							<td>N/A</td>
							<td>49</td>
							
						</tr>
						<tr>
							<td>50.6</td>
							<td>University of Northampton</td>
							<td>53.1</td>
							<td>N/A</td>
							<td>48</td>
							
						</tr>
						<tr>
							<td>50.4</td>
							<td>Bath Spa University</td>
							<td>46.7</td>
							<td>N/A</td>
							<td>54</td>
							
						</tr>
						<tr>
							<td>50.4</td>
							<td>University of Winchester</td>
							<td>51.7</td>
							<td>N/A</td>
							<td>49</td>
							
						</tr>
						<tr>
							<td>50.1</td>
							<td>Goldsmiths, University of London</td>
							<td>48.7</td>
							<td>41.65</td>
							<td>60</td>
							
						</tr>
						<tr>
							<td>50.1</td>
							<td>Edinburgh Napier University</td>
							<td>58.9</td>
							<td>33.25</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>50.1</td>
							<td>Anglia Ruskin University</td>
							<td>56.4</td>
							<td>46.75</td>
							<td>47</td>
							
						</tr>
						<tr>
							<td>49.6</td>
							<td>Sheffield Hallam University</td>
							<td>61.3</td>
							<td>27.6</td>
							<td>60</td>
							
						</tr>
						<tr>
							<td>49.6</td>
							<td>Brunel University London</td>
							<td>46.2</td>
							<td>44.55</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>49.1</td>
							<td>University of Sunderland</td>
							<td>50.2</td>
							<td>N/A</td>
							<td>48</td>
							
						</tr>
						<tr>
							<td>49.1</td>
							<td>Birmingham City University</td>
							<td>56</td>
							<td>33.25</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>48.9</td>
							<td>St Mary's University, Twickenham</td>
							<td>49.8</td>
							<td>N/A</td>
							<td>48</td>
							
						</tr>
						<tr>
							<td>47.7</td>
							<td>University of Central Lancashire</td>
							<td>56.5</td>
							<td>27.6</td>
							<td>59</td>
							
						</tr>
						<tr>
							<td>47.6</td>
							<td>University of Bradford</td>
							<td>50.5</td>
							<td>33.4</td>
							<td>59</td>
							
						</tr>
						<tr>
							<td>47.6</td>
							<td>Glasgow Caledonian University</td>
							<td>56.6</td>
							<td>30.2</td>
							<td>56</td>
							
						</tr>
						<tr>
							<td>47.1</td>
							<td>Kingston University</td>
							<td>62.8</td>
							<td>27.6</td>
							<td>51</td>
							
						</tr>
						<tr>
							<td>46.8</td>
							<td>University of Cumbria</td>
							<td>50.6</td>
							<td>N/A</td>
							<td>43</td>
							
						</tr>
						<tr>
							<td>46.7</td>
							<td>Buckinghamshire New University</td>
							<td>52.4</td>
							<td>N/A</td>
							<td>41</td>
							
						</tr>
						<tr>
							<td>46.7</td>
							<td>Middlesex University</td>
							<td>45.3</td>
							<td>41.65</td>
							<td>53</td>
							
						</tr>
						<tr>
							<td>46.5</td>
							<td>University of Greenwich</td>
							<td>51.3</td>
							<td>33.25</td>
							<td>55</td>
							
						</tr>
						<tr>
							<td>46.3</td>
							<td>University of Derby</td>
							<td>59.4</td>
							<td>27.6</td>
							<td>52</td>
							
						</tr>
						<tr>
							<td>46.3</td>
							<td>Robert Gordon University</td>
							<td>62.3</td>
							<td>17.65</td>
							<td>59</td>
							
						</tr>
						<tr>
							<td>46.3</td>
							<td>Teesside University, Middlesbrough</td>
							<td>58.2</td>
							<td>27.6</td>
							<td>53</td>
							
						</tr>
						<tr>
							<td>45.5</td>
							<td>Edge Hill University</td>
							<td>56.8</td>
							<td>17.65</td>
							<td>62</td>
							
						</tr>
						<tr>
							<td>45.3</td>
							<td>Staffordshire University</td>
							<td>60.3</td>
							<td>17.65</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>44.9</td>
							<td>University of Hertfordshire</td>
							<td>49</td>
							<td>27.6</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>44.5</td>
							<td>Newman University, Birmingham</td>
							<td>46.9</td>
							<td>N/A</td>
							<td>42</td>
							
						</tr>
						<tr>
							<td>44.0</td>
							<td>De Montfort University</td>
							<td>40.6</td>
							<td>33.25</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>43.9</td>
							<td>University of Salford</td>
							<td>49</td>
							<td>27.6</td>
							<td>55</td>
							
						</tr>
						<tr>
							<td>43.2</td>
							<td>University of Brighton</td>
							<td>49.3</td>
							<td>33.4</td>
							<td>47</td>
							
						</tr>
						<tr>
							<td>42.9</td>
							<td>University of Roehampton</td>
							<td>43.2</td>
							<td>27.6</td>
							<td>58</td>
							
						</tr>
						<tr>
							<td>42.8</td>
							<td>Leeds Trinity University</td>
							<td>44.6</td>
							<td>N/A</td>
							<td>41</td>
							
						</tr>
						<tr>
							<td>42.7</td>
							<td>University of Chester</td>
							<td>56.3</td>
							<td>17.65</td>
							<td>54</td>
							
						</tr>
						<tr>
							<td>42.3</td>
							<td>London Metropolitan University</td>
							<td>41.5</td>
							<td>N/A</td>
							<td>43</td>
							
						</tr>

                        <tr>
							<td>42.0</td>
							<td>University of the West of Scotland</td>
							<td>40</td>
							<td>38.05</td>
							<td>48</td>
							
						</tr>
						<tr>
							<td>42.0</td>
							<td>London South Bank University</td>
							<td>52.3</td>
							<td>17.65</td>
							<td>56</td>
							
						</tr>
						<tr>
							<td>42.0</td>
							<td>University of South Wales</td>
							<td>58.3</td>
							<td>17.65</td>
							<td>50</td>
							
						</tr>
                        <tr>
							<td>39.6</td>
							<td>Leeds Beckett University</td>
							<td>48.2</td>
							<td>27.6</td>
							<td>43</td>
							
						</tr>
                        <tr>
							<td>39.3</td>
							<td>University of Westminster, London</td>
							<td>42.3</td>
							<td>27.6</td>
							<td>48</td>
							
						</tr>
                        <tr>
							<td>39.9</td>
							<td>University of East London</td>
							<td>45.2</td>
							<td>27.6</td>
							<td>44</td>
							
						</tr>
                        <tr>
							<td>38.5</td>
							<td>St George's, University of London</td>
							<td>0</td>
							<td>52.4</td>
							<td>63</td>
							
						</tr>
                        <tr>
							<td>37.9</td>
							<td>University of Wolverhampton</td>
							<td>45.2</td>
							<td>27.6</td>
							<td>41</td>
							
						</tr>
			
                        <tr>
							<td>33.9</td>
							<td>Canterbury Christ Church University</td>
							<td>45.1</td>
							<td>17.65</td>
							<td>39</td>
							
						</tr>					
					
					</tbody>
				</table>
				
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	    
				</div>
</div>	
</body>
</html>
<style>
.back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 20px;
    right: 20px;
    display:none;
}

tbody {
    display:block;
    height:500px;
    overflow:auto;
}
thead, tbody tr {
    display:table;
    width:100%;
    table-layout:fixed;
}

tr.red th {
  background:#CB2133;
  color: white;
}  










</style>
<script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});


</script>