import { Text, View, Image, ScrollView, TouchableOpacity } from 'react-native';

import styles from '../../../../Components/Styles/PerfilOrganizacao/perfilOrgStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function Teatros({ navigation }) {

  return (
    <View style={styles.container}>
      <ScrollView>
        <View style={styles.imageBanner}>
            <View style={styles.imagePerfil}>
                <Image
                  style={{ height: 20, width: 20, marginLeft: 1, marginBottom: 1 }}
                  source={require('../../../../../assets/img/Evento/perfil.png')}
                />
            </View>
        </View>

        <View style={{width: '90%', alignSelf: 'center', borderRadius: 20, alignItems: 'center', justifyContent: 'flex-end',flexDirection:'row',}}>
            <TouchableOpacity style={styles.btnSeguir}>
              <Text style={styles.buttonText}>Seguir</Text>
            </TouchableOpacity>
        </View>

        <View style={styles.descOrganizacao}>
            <View style={{alignItems: 'flex-start', justifyContent: 'flex-start',}}>
                <Text style={{ fontSize: 30, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                    Organização
                </Text>
                <Text style={{ fontSize: 12, color: '#A6A6A6',textAlign: 'left', }}>
                    Uma breve descrição sobre a empresa.
                </Text>
            </View>
            
        </View>

        <View style={styles.cards}>
          <Text style={{ fontSize: 18, fontWeight: 'bold', color: '#A6A6A6', paddingLeft: '10%',textAlign: 'left', alignSelf: 'flex-start', position: 'absolute', marginTop: 25}}>
              Últimos 30 dias
          </Text>
          <View style={styles.TeatrosArea}>
            <View style={styles.TeatrosLocal}>
              <Text style={{ fontSize: 32, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                TEATRO GAZETA
              </Text>
              <View style = {{flexDirection:'row', height: 75}}>
                <Image
                    style={{ height: 30, width: 20, marginLeft: 10 }}
                    source={require('../../../../../assets/img/Teatros/Point.png')}
                />
                <Text
                    style={{
                    fontSize: 20,
                    textAlign: 'center',
                    color: '#A6A6A6',
                    marginRight: 20
                    }}
                >
                  Av. Paulista, 900 - Bela Vista, 
                  São Paulo - Sp, 01310-100
                </Text>
              </View>
              <TouchableOpacity
                style={styles.button}
                onPress={() => navigation.navigate('Evento')}
              >
                <Text style={styles.buttonText}>Saber mais</Text>
              </TouchableOpacity>
            </View>
          </View>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
