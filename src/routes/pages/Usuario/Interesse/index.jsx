import { View, Text, Pressable, Image, ScrollView, } from 'react-native';
import styles from '../../../../Components/Styles/Interesse/InteresseStyle';

export default function Sobre({ navigation }) {

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 45 }}
                source={require('../../../../../assets/img/Seguindo/superiorDireito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 70, width: 28, marginTop: 120}}
                source={require('../../../../../assets/img/Seguindo/direito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
          <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 155, width: 65, marginBottom: 100}}
                source={require('../../../../../assets/img/Seguindo/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end'}}>
              <Image
                style={{ height: 150, width: 120,}}
                source={require('../../../../../assets/img/DadosPessoais/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>
        
        <ScrollView style={{width: '100%',}}>
            <View>
                <View style={{ flexDirection: 'row', alignItems: 'center', paddingHorizontal: 15}}>
                    <Pressable onPress={() => navigation.navigate('Perfil')}>
                        <Image
                        style={{ height: 30, width: 30 }}
                        source={require('../../../../../assets/img/Contato/back.png')}
                        />
                    </Pressable>
                    <Text style={styles.titulo}>Registro de interesse</Text>
                </View>
                <Text style={styles.texto}>Acompanhe os eventos no qual você se interessou e desfaça o registro quando quiser </Text>
            </View>
            <View style={styles.cards}>
                <View style={styles.ProgArea}>
                    <Image
                    style={styles.Foto}
                    source={require('../../../../../assets/img/Programação Cultural/showDeDesenhos.png')}
                    />
                    <View style={styles.TituloCard}>
                        <Text style={{ fontSize: 26, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                            SHOW DE DESENHOS
                        </Text>
                        <View style = {styles.InfosArea}>
                            <View style = {styles.InfosRows}>
                                <View style = {styles.Infos}>
                                <Image
                                style={{ height: 26, width: 25 }}
                                source={require('../../../../../assets/img/Programação Cultural/classificacao.png')}
                                />
                                <Text style = {styles.InfosText}>
                                Faixa etária: +6
                                </Text>
                                </View>
                                <View style = {styles.Infos}>
                                <Image
                                    style={{ height: 26, width: 26 }}
                                    source={require('../../../../../assets/img/Programação Cultural/valor.png')}
                                />
                                <Text style = {styles.InfosText}>
                                    Valor: Gratuito
                                </Text>
                                </View>
                            </View>
                            <View style = {styles.InfosRows}>
                            <View style = {styles.Infos}>
                                <Image
                                style={{ height: 27, width: 26 }}
                                source={require('../../../../../assets/img/Programação Cultural/point.png')}
                                />
                                <Text style = {styles.InfosText}>
                                    Local: Teatro São Paulo/SP
                                </Text>
                            </View>
                            <View style = {styles.Infos}>
                                <Image
                                style={{ height: 26, width: 26 }}
                                source={require('../../../../../assets/img/Programação Cultural/relogio.png')}
                                />
                                <Text style = {styles.InfosText}>
                                Turno: Verspetino
                                </Text>
                            </View>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', alignItems: 'center',}}>
                            <Pressable
                                style={styles.button}
                                onPress={() => navigation.navigate('Evento')}
                            >
                                <Text style={styles.buttonText}>Saiba mais</Text>
                            </Pressable>
                            <Pressable
                                style={styles.button2}
                                onPress={() => navigation.navigate('Evento')}
                            >
                                <Text style={styles.buttonText2}>Desfazer Interesse</Text>
                            </Pressable>
                        </View>
                    </View>
                </View>
                <View style={styles.ProgArea}>
                    <Image
                    style={styles.Foto}
                    source={require('../../../../../assets/img/Programação Cultural/showDeDesenhos.png')}
                    />
                    <View style={styles.TituloCard}>
                        <Text style={{ fontSize: 26, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                            SHOW DE DESENHOS
                        </Text>
                        <View style = {styles.InfosArea}>
                            <View style = {styles.InfosRows}>
                                <View style = {styles.Infos}>
                                <Image
                                style={{ height: 26, width: 25 }}
                                source={require('../../../../../assets/img/Programação Cultural/classificacao.png')}
                                />
                                <Text style = {styles.InfosText}>
                                Faixa etária: +6
                                </Text>
                                </View>
                                <View style = {styles.Infos}>
                                <Image
                                    style={{ height: 26, width: 26 }}
                                    source={require('../../../../../assets/img/Programação Cultural/valor.png')}
                                />
                                <Text style = {styles.InfosText}>
                                    Valor: Gratuito
                                </Text>
                                </View>
                            </View>
                            <View style = {styles.InfosRows}>
                            <View style = {styles.Infos}>
                                <Image
                                style={{ height: 27, width: 26 }}
                                source={require('../../../../../assets/img/Programação Cultural/point.png')}
                                />
                                <Text style = {styles.InfosText}>
                                    Local: Teatro São Paulo/SP
                                </Text>
                            </View>
                            <View style = {styles.Infos}>
                                <Image
                                style={{ height: 26, width: 26 }}
                                source={require('../../../../../assets/img/Programação Cultural/relogio.png')}
                                />
                                <Text style = {styles.InfosText}>
                                Turno: Verspetino
                                </Text>
                            </View>
                            </View>
                        </View>
                        <View style={{ flexDirection: 'row', alignItems: 'center',}}>
                            <Pressable
                                style={styles.button}
                                onPress={() => navigation.navigate('Evento')}
                            >
                                <Text style={styles.buttonText}>Saiba mais</Text>
                            </Pressable>
                            <Pressable
                                style={styles.button2}
                                onPress={() => navigation.navigate('Evento')}
                            >
                                <Text style={styles.buttonText2}>Desfazer Interesse</Text>
                            </Pressable>
                        </View>
                    </View>
                </View>
            </View>
        </ScrollView>
    </View> 
  );
};